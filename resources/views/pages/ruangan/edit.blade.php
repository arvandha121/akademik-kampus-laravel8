@extends('layouts.layout')

@section('content')
    <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <a href="{{ route('ruangan.index') }}" class="btn btn-success pull-left">
                <i class="fa fa-arrow-left"></i>
              </a>
            </div>
          </div>
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Edit Ruangan</h4>
                </div>
                <div class="card-body">
                  <form action="{{ route('ruangan.update', $item->id) }}" method="POST">
                  @method('PUT')
                  @csrf
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Ruangan</label>
                          <input type="text" class="form-control" name="ruangan" value="{{ old('ruangan') ? old('ruangan') : $item->ruangan }}" 
                            class="form-control @error('ruangan') is-invalid @enderror">
                            @error('ruangan') <div class="text-muted">{{ $message }}</div> @enderror
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Gedung</label>
                            <select class="form-control @error('id_gedung') is-invalid @enderror" id="exampleFormControlSelect1" name="id_gedung">
                              @foreach ($gedungs as $gedung)
                                @if ($item->id_gedung == $gedung->id)
                                  <option value="{{ $gedung->id }}" selected>{{ $gedung->gedung }}</option>
                                @else
                                  <option value="{{ $gedung->id }}">{{ $gedung->gedung }}</option>
                                @endif
                              @endforeach
                            </select>
                            @error('id_gedung') <div class="text-muted">{{ $message }}</div> @enderror
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Edit</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection