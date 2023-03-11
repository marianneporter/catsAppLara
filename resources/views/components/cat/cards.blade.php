<div class=" flex flex-wrap mt-6 gap-6 place-content-center">
    @foreach($cats as $cat) 
         <x-cat.card :cat=$cat />
    @endforeach
</div>
