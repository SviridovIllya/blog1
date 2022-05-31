@extends('admin.layouts.main')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавление тега</h1>
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
                <div class="col-12">
                    <form action="{{route('admin.tag.store')}}" method="POST" class="col-2">
                        @csrf
                        <div class="form-group">
                            <label >Название</label>
                            <input type="text"  class="form-control " name="title"  placeholder="Название тега">
                            @error('title')
                            <div class="text-danger">Пустое поле </div>
                            @enderror
                        </div>
                        <input type="submit" class="btn btn-primary" value="Добавить">
                    </form>

                </div>

            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection