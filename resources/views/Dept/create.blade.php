@extends("layouts.dashboard")
@section('title', 'Add new Department')

@section('dashboard-content')

    <form action="/dept/store"  id="form" method="post" @submit.prevent="saveDept">
        <div class="form-label-group">
            <input type="text" id="name" name="name" :class="{ 'is-invalid' :  errors  }" class="form-control" v-model="name" placeholder="Name" @keydown="errors=false" autofocus required>
            <label for="name">Name</label>
        </div>
        <div class="form-group d-flex flex-row-reverse">
            <button type="submit" class="btn btn-success col-2">Add</button>
        </div>
    </form>

@endsection