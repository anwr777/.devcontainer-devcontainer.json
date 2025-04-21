@extends('layouts.master')

@section('title', 'إنشاء تذكرة جديدة')

@section('content')
<div class="content-header">
  <h1>إنشاء تذكرة جديدة</h1>
</div>

<div class="content">
  <div class="card">
    <div class="card-body">
      <form method="POST" action="{{ route('tickets.store') }}">
        @csrf

        <div class="form-group">
          <label for="user_id">المستخدم</label>
          <select name="user_id" id="user_id" class="form-control">
            @foreach($users as $user)
              <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
          </select>
        </div>

        <div class="form-group">
          <label for="balance">الرصيد</label>
          <input type="number" step="0.01" name="balance" id="balance"
                 class="form-control" value="{{ old('balance') }}">
        </div>

        <div class="form-group">
          <label for="status">الحالة</label>
          <select name="status" id="status" class="form-control">
            <option value="صالح">صالح</option>
            <option value="منتهي">منتهي</option>
          </select>
        </div>

        <button type="submit" class="btn btn-primary">إنشاء التذكرة</button>
      </form>
    </div>
  </div>
</div>
@endsection
