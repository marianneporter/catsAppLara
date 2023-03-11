<div class="card-shadow p-6 min-w-[20rem] leading-6 rounded">
    <h1 class="font-bold text-lg">{{$cat->name}}</h1>
    <div class="mt-1"><span class="font-semibold">DOB: </span><span>{{convertDbDateToDispFormat($cat->dob)}}</span></div>
    <div><span class="font-semibold">Colour: </span><span>{{ $cat->colour }}</span></div>
    <div><span class="font-semibold">Favourite Food: </span><span>{{ $cat->fav_food }}</span></div>
    <div class="flex place-content-center gap-4 mt-4">
        <a href="{{ route('cats.edit', $cat->id) }}" class="btn bg-blue-500 text-white inline-block">Edit</a>   
        <x-cat.forms.delete-form :cat=$cat />       
    </div>
</div>