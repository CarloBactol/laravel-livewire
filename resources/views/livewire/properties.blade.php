<div>

    <form wire:submit="todo">
        <input type="text" wire:model.live.debounce="todo">
        <button type="submit" >Add</button> <br>
        <span> Current todo: {{$todo}} </span>  <br>
    </form>
    
  <ul>
    @foreach ($todos as $todo)
       <li> {{$todo}} </li>
    @endforeach
  </ul>
</div>
