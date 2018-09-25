@extends("layouts.dashboard")
@section('title', 'Add new Department')

@section('dashboard-content')

    <form action="/departments" class="m-auto col-6"  id="form" method="post" @submit.prevent="saveDept">
        <div class="form-label-group">
            <input type="text" id="name" name="name" :class="{ 'is-invalid' :  nameError  }" class="form-control form-control-lg" v-model="name" placeholder="Name" @keydown="errors=false" autofocus required>
            <label for="name">Name</label>
        </div>
        <div class="form-group">
            <label for="type">Type</label>
            <select name="type" id="type" class="form-control" :class="{ 'is-invalid' :  typeError  }" v-model="type">
                <option value="govt">Government</option>
                <option value="semi-govt">Semi Government</option>
                <option value="private">Private</option>
            </select>
        </div>
        <div class="form-group d-flex flex-row-reverse">
            <button type="submit" class="btn btn-success col-2">Add</button>
        </div>
    </form>

@endsection