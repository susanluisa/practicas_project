@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Nuevo > Etiqueta</div>

                    <div class="card-body">
                        <form class="" method="POST" action="{{ url('tags') }}">
                            {{ csrf_field() }}
                            <div class="position-relative form-group">
                                <label for="nameTags" class="">Nombre</label>
                                <input name="name" id="nameTags"
                                       placeholder=""
                                       type="text"
                                       class="form-control">
                            </div>
                            <div class="position-relative form-group">
                                <label for="startAtTags" class="">Inicio</label>
                                <input name="start_at" id="startAtTags"
                                       placeholder=""
                                       type="date"
                                       class="form-control">
                            </div>
                            <div class="position-relative form-group">
                                <label for="deadLineAtTags" class="">Final</label>
                                <input name="deadline_at" id="deadLineAtTags"
                                       placeholder=""
                                       type="date"
                                       class="form-control">
                            </div>
                            <div class="position-relative form-group">
                                <label for="colorTags" class="">Color</label>
                                <input name="color" id="colorTags"
                                       placeholder=""
                                       type="color"
                                       class="form-control">
                            </div>
                            <div class="position-relative form-group">
                                <label for="projectTags" class="">Proyectos</label>
                                <select name="projects_id" id="projectTags" class="form-control">
                                    @foreach($projects as $project)
                                        <option value="{{$project->id}}">{{$project->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            @trix(\App\Tags::class, 'content')
                            <button class="mt-1 btn btn-primary">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
