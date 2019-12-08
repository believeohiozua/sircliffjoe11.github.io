<div class="invoice p-3 mb-3">
    <div class="row">
        <div class="col-12">
            <h4>
            <i class="fa fa-heart"></i> {{ $pageTitle }} | {{ config('settings.domain_name') }}
            <small class="float-right">Date: {{ now()->format('d M, Y') }}</small>
            </h4>
        </div>
    </div> <hr>

    <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
            {{ $subTitle }}
        </div>

        <div class="col-sm-4 invoice-col">
            <b>Active Batch No.:</b> #{{ $subText }} <br>
            {{-- <b>Batch Total:</b> 2/22/2014<br> --}}
        </div>

        <div class="col-sm-4 invoice-col">
            <a href="{{ route('admin.payouts.approveAll') }}" type="button" class="btn btn-sm btn-success float-right"><i class="far fa-credit-card"></i> Mark All Paid
            </a>
        </div>
    </div>
    <hr>

    <div class="row">
        <div class="card-body p-0 table-responsive">
            <table class="table table-striped table-sm table-valign-middle" id="sampleTable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Beneficiary</th>
                        <th>Position</th>
                        <th>Bank Name</th>
                        <th>Acc. Name</th>
                        <th>Acc. Number</th>
                        <th>Acc. Type</th>
                        <th>Amount</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($payouts as $key => $payout)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>
                            @if ( $payout->user->hasMedia('avatar') )
                                <img src="{{ asset('storage/'.$payout->user->firstMedia('avatar')->getDiskPath()) }}" alt="{{ $payout->user->name }}" class="img-circle img-size-32 mr-2">
                            @else
                                <img src="{{ asset( 'storage/avatars/'.$payout->user->gender.'.png' ) }}" alt="{{ $payout->user->name }}" class="img-circle img-size-32 mr-2">
                            @endif
                            {{ $payout->user->name }}
                        </td>
                        <td>{{ $payout->slot->name }}</td>
                        <td>{{ $payout->user->getBankDetails()['bank'] }}</td>
                        <td>{{ $payout->user->getBankDetails()['account_name'] }}</td>
                        <td>{{ $payout->user->getBankDetails()['account_number'] }}</td>
                        <td>{{ $payout->user->getBankDetails()['account_type'] }}</td>
                        <td>N{{ number_format($payout->amount) }}</td>
                        <td class="project-actions text-right">
                            <a class="btn btn-success btn-block btn-sm" href="{{ route('admin.payouts.approveOne', $payout->id) }}">
                                Mark Paid
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div> <hr>

    <!-- this row will not appear when printing -->
    <div class="row no-print">
        <div class="col-12">
            <a href="{{ route('admin.payouts.print') }}" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
            {{-- <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
            <i class="fas fa-download"></i> Generate PDF
            </button> --}}
        </div>
    </div>
</div>