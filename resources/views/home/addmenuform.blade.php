
<x-layout-top>
<link rel="stylesheet" href="{{ asset('/css/addmenu.css')}}">
    <main id ="main">
       <div class="col-xs-11 col-sm-10 col-md-10 offset-xs-1 offset-sm-1 offset-md-1 p-5 ">
            <div class="d-flex align-items-center py-4 addmenu">
                <div class="form-signin w-100 m-auto">
                    <form class="text-center  mx-0" action ="{{ route('addmenu') }}" method ="post">
                    @csrf
                    <p class=" mt-2 mb-0 fw-normal">献立登録</p><hr>
                        <div class="login">
                        @if($errors->any())
                            <div class = "alert alert-danger py-2">
                            </div><br>
                        @endif
                            <input type="hidden" name="id"><br>
                            <input type="text" name="date" placeholder="日付"><br>
                            <input type="hidden" name="space_id"  placeholder="space_id" value = "{{$space_id['space_id']}}"><br>
                            <input type="text" name="title" placeholder="献立名" ><br>
                            <input type="hidden" name="user_id" value = " {{ Auth::id() }}" placeholder="user_id" ><br>
                            <input type="text" name="body"  placeholder="献立詳細" ><br>
<br>
                            <button type ="submit">登録</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</x-layout-top>



