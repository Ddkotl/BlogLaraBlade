@extends('admin.layouts.dashbordAdmin')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Пользователи</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Главная</a></li>
              <li class="breadcrumb-item active">Пользователи</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 mb-3">
            <a href="{{ route('admin.user.create')}}" class="btn btn-block btn-primary">Добавить нового пользователя</a>
          </div>
        </div>
        <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body table-responsive p-0">
                  <table class="table table-hover text-nowrap">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Имя</th>
                        <th>Дата создания</th>
                        <th>Дата обновления</th>
                        <th>Просмотр</th>
                        <th>Редактировать</th>
                        <th>Удалить</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($users as $user)
                      <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->created_at}}</td>
                        <td>{{$user->updated_at}}</td>
                        <td>
                          <div >
                            <a href="{{route('admin.user.show',$user->id)}}" class="btn btn-block btn-info">Просмотреть</i></a>
                          </div>
                        </td>
                        <td>
                          <div >
                            <a href="{{ route('admin.user.edit',$user->id)}}" class="btn btn-block btn-warning">Изменить</a>
                          </div>
                        </td>
                        <td>
                          <div >
                            <form action="{{route('admin.user.delete',$user->id)}}" method="POST">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-block btn-danger">
                                  Удалить
                              </button>
                            </form>                          
                          </div>
                        </td>
                      </tr>                        
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
        </div>
        <!-- /.row -->
      
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>


@endsection

