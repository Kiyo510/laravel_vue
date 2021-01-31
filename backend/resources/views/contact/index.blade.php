@extends('layouts.app')

@section('content')
<div class="container">
  <form class="input-group" method="GET" action="{{ route('contact.index') }}">
    <input type="text" class="form-control" name="search" placeholder="検索する">
    <span class="input-group-btn">
      <button type="button" class="btn btn-primary">検索</button>
    </span>
  </form>
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('Login') }}</div>
        <div class="card-body">
          <a href="{{ route('contact.create') }}">新規登録</a>
          @foreach ($contacts as $contact)
          <div class="row justify-content-center">
            {{ $contact->id }}
            {{ $contact->your_name }}
            {{ $contact->title }}
            {{ $contact->created_at }}
            <a href="{{ route('contact.show', ['id' => $contact->id]) }}">詳細を見る</a>
          </div>
          @endforeach
          {{ $contacts->links() }}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
