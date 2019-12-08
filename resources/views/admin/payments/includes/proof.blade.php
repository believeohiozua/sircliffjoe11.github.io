<div class="modal fade" id="submit{{ $payment->id }}" tabindex="-1" role="dialog" aria-labelledby="model-8"
aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h3 class="modal-title" id="model-8">
          Proof of {{ $payment->name }}
        </h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
          <div class="col-md-12">
            <div class="card card-widget">
              <div class="card-header">

                <div class="user-block">
                  @if ( $payment->user->hasMedia('avatar') )
                    <img class="img-circle" src="{{ asset('storage/'.$payment->user->firstMedia('avatar')->getDiskPath()) }}" alt="{{ $payment->user->name }}">
                  @else
                    <img class="img-circle" src="{{ asset( 'storage/avatars/'.$payment->user->gender.'.png' ) }}" alt="{{ $payment->user->name }}">
                  @endif
                  <span class="username"><a href="#">{{ $payment->user->name }}</a></span>
                  <span class="description">Submitted - {{ $payment->user_submitted_at }}</span>
                </div>

              </div>


              <div class="card-body">
                @if ( $payment->hasMedia('proof') )
                <a href="{{ url('storage/'.$payment->firstMedia('proof')->getDiskPath()) }}">
                  <img class="img-fluid pad" src="{{ asset('storage/'.$payment->firstMedia('proof')->getDiskPath()) }}" alt="Proof">
                </a>
                @else
                <img class="img-fluid pad" src="" alt="Proof">
                @endif

                <hr>

                <p><b>Payment Method:</b> {{ $payment->pay_method }}</p>
                <p><b>Additional Info:</b> {{ $payment->pay_details }}</p>
              </div>
            </div>
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>