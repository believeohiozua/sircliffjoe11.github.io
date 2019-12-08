@extends('layouts.email-master')

@section('content')
  <tr>
    <td class="header-lg">
      Hello <span style="">{{ $data['recipient']['name'] }}</span>
    </td>
  </tr>
  <tr>
    <td class="free-text">
      <p>{{ $data['message'] }}</p>
    </td>
  </tr>
  <tr>
    <td class="free-text">
      <p>Regards,</p>
      <p>Mrs. Chinyere Osuoha,</p>
      <p>MD | {{ config('settings.domain_name') }}</p>
    </td>
  </tr>
@endsection
