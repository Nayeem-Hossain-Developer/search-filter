@foreach($searchResults as $searchResult)
    <li class="list-group-item mb-3">{{$searchResult->search_results}} <strong>(search by : {{$searchResult->user->name}})</strong></li>
    <hr>
@endforeach