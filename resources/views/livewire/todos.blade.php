<div>
    <div class="d-grid gap-2">
        <button type="button" class="btn btn-lg btn-success btn-block"><i class="fa-solid fa-plus"></i> Todo</button>
    </div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Titre</th>
            <th scope="col">Description</th>
            <th scope="col">Echéance</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($todos as $todo)
          <tr>
            <th scope="row"><input wire:click="check({{$todo->id}})" class="form-check-input" type="checkbox" value="" id="flexCheckDefault" @if($todo->done) {{'checked'}} @endif></th>
            <td>{{$todo->title}}</td>
            <td>{{$todo->description}}</td>
            <td>{{$todo->ends_at}}</td>
            <td>
                <button type="button" class="btn btn-sm btn-block"><i class="fa-solid fa-eye"></i></button>
                <button type="button" wire:click="up({{$todo->id}})" class="btn btn-sm btn-block"><i class="fa-solid fa-arrow-up"></i></button>
                <button type="button" wire:click="down({{$todo->id}})" class="btn btn-sm btn-block"><i class="fa-solid fa-arrow-down"></i></button>
                <button type="button" class="btn btn-sm btn-block"><i class="fa-solid fa-pen-to-square"></i></button>
                <button type="button" wire:click="delete({{$todo->id}})" class="btn btn-sm btn-block text-danger"><i class="fa-solid fa-trash"></i></button>
            </td>
          </tr>
        @endforeach
        </tbody>
    </table>
</div>
