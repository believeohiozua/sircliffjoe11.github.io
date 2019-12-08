<?php

namespace App\Repositories;

use MediaUploader;
use App\Models\Category;
use App\Traits\UploadAble;
use Illuminate\Http\UploadedFile;
use App\Contracts\CategoryContract;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Doctrine\Instantiator\Exception\InvalidArgumentException;

/**
 * Class CategoryRepository
 *
 * @package \App\Repositories
 */
class CategoryRepository extends BaseRepository implements CategoryContract
{
    use UploadAble;

    /**
     * CategoryRepository constructor.
     * @param Category $model
     */
    public function __construct(Category $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }

    /**
     * @param string $order
     * @param string $sort
     * @param array $columns
     * @return mixed
     */
    public function listCategories(string $order = 'id', string $sort = 'desc', array $columns = ['*'])
    {
        return $this->all($columns, $order, $sort);
    }

    /**
     * @param int $id
     * @return mixed
     * @throws ModelNotFoundException
     */
    public function findCategoryById(int $id)
    {
        try {
            return $this->findOneOrFail($id);

        } catch (ModelNotFoundException $e) {

            throw new ModelNotFoundException($e);
        }
    }

    /**
     * @param array $params
     * @return Category|mixed
     */
    public function createCategory($request)
    {
        try {            
            $image = null;

            $params = $request->except(['_token', 'image']);
            $params['featured'] = $request->has('featured') ? 1 : 0;
            $params['menu'] = $request->has('menu') ? 1 : 0;

            $category = new Category($params);
            $category->save();

            if ($request->has('image') && ($request->image instanceof  UploadedFile)) {
                $image = MediaUploader::fromSource($request->image)
                    ->useFileName('category'.$category->id)
                    ->toDirectory('images')
                    ->onDuplicateIncrement()
                    ->upload();

                $category->syncMedia($image, 'image');
            }

            return $category;

        } catch (QueryException $exception) {
            throw new InvalidArgumentException($exception->getMessage());
        }
    }
    
    /**
    * @param array $params
    * @return mixed
    */
    public function updateCategory($request)
    {
        $category = $this->findCategoryById($request->id);

        if ($request->has('image') && ($request->image instanceof  UploadedFile)) {
            $image = MediaUploader::fromSource($request->image)
                ->useFileName('category'.$category->id)
                ->toDirectory('images')
                ->onDuplicateReplace()
                ->upload();

            $category->syncMedia($image, 'image');
        }

        $params = $request->except(['_token', 'image']);
        $params['featured'] = $request->has('featured') ? 1 : 0;
        $params['menu'] = $request->has('menu') ? 1 : 0;

        $category->update($params);

        return $category;
    }

    /**
     * @param $id
     * @return bool|mixed
     */
    public function deleteCategory($id)
    {
        $category = $this->findCategoryById($id);

        if ($category->hasMedia('image')) {
            $category->firstMedia('image')->delete();
        }

        $category->delete();

        return $category;
    }    

    /**
     * @return mixed
     */
    public function treeList()
    {
        return Category::orderByRaw('-name ASC')
            ->get()
            ->nest()
            ->setIndent('|–– ')
            ->listsFlattened('name');
    }

}