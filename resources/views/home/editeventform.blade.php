<link rel="stylesheet" href="{{ asset('/css/index.css')}}">
<link rel="stylesheet" href="{{ asset('/css/addmenu.css')}}">    <x-layout-top>
<main id ="main">
    <div class="col-xs-11 col-sm-10 col-md-10 offset-xs-1 offset-sm-1 offset-md-1 p-5 ">
        <div class="d-flex align-items-center py-4 addmenu">
            <div class="form-signin w-100 m-auto">
                <form class="text-center  mx-0" action ="{{ route('editupdate') }}" method ="post">
                @csrf
                    <h6 class="h6 mt-2 mb-0 fw-normal">献立編集</h6>
                    <div class="login">
                    @if($errors->any())
                        <div class = "alert alert-danger py-2">
                        </div><br>
                    @endif
                        <input type="text" name="id" value = "{{ $edit['id'] }}"><br>
                        <input type="text" name="date" placeholder="日付" class = "input" value = "{{ $edit['date'] }}"><br>
                        <input type="text" name="title" placeholder="献立名" value = "{{ $edit['title'] }}"><br>
                        <input type="text" name="body" placeholder="献立詳細" value = "{{ $edit['body'] }}"><br><br>
                        <button type ="submit">編集</button><br><br>
                </form>
                <form class="text-center  mx-0" action ="{{ route('editdelete') }}" method ="post">
                @csrf
                    <input type="hidden" name="id" value = "{{ $edit['id'] }}">
                    <button type ="submit">削除</button>
                </form>
            </div>
        </div>
    </div>
</main>
</x-layout-top>



