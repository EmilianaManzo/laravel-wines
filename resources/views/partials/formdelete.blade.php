<form
class="d-inline-block"
  action="{{route('wines.destroy', $wine)}}"
  method="post"
  onsubmit="return confirm('Sei securo di voler eliminare {{$wine?->title}} ?')">
    @csrf
    @method('DELETE')

    <button type="submit" class="btn btn-danger"> <i class="fa-solid fa-trash"></i> </button>
   </form>
