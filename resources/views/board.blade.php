@extends('adminlte::page')

@section('title', 'Board')

@section('content_header')
    <h1>Board</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <table id="table" class="table table-bordered">
      <thead>
        <tr>
          <th style="width: 10px">#</th><th>Task</th><th>Progress</th><th style="width: 40px">Label</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1.</td>
          <td>Update software</td>
          <td><div class="progress progress-xs"><div class="progress-bar progress-bar-danger" style="width: 55%"></div></div></td>
          <td><span class="badge bg-danger">55%</span></td>
        </tr>
        <tr>
          <td>2.</td>
          <td>Clean database</td>
          <td><div class="progress progress-xs"><div class="progress-bar bg-warning" style="width: 70%"></div></div></td>
          <td><span class="badge bg-warning">70%</span></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    $(document).ready(function() {
        $('#table').DataTable();
    } );
</script>
@stop