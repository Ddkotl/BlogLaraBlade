@extends('admin.layouts.dashbordAdmin')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Изменение тэга</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Главная</a></li>
              <li class="breadcrumb-item"><a href="{{route('admin.tag.index')}}">Тэги</a></li>
              <li class="breadcrumb-item active">{{$tag->title}}</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
        
          <form class="col-12" action="{{route('admin.tag.update', $tag->id)}}" method="POST">
            @csrf
            @method('PATCH')
            <div class="form-group">
              <input type="text" name="title" class="form-control" placeholder="Введите название тэга" value="{{$tag->title}}">
              @error('title')
                <div class="text-danger">
                  Это поле обязательно для заполнения
                </div>
              @enderror
            </div>
            <button type="submit" class="btn btn-block btn-success">Сохранить</button>
          </form>
          
        </div>
        <!-- /.row -->
      
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>


@endsection

