<x-layout-top>
    <main id="main">
        <div class="container">
            <form method = "post" action = "{{route('logout')}}">
            @csrf
            <button class = "button btn-warning">ログアウト</button>
            <h2>コンテンツタイトル</h2>
                <div class="row">
                    <div class="col">
                    <h3>コンテンツ1</h3>
                        <p>この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、</p>
                    <button type="button" class="btn btn-secondary">
                        <a href="#" class="text-white">MORE</a>
                    </button>
                    </div>
                    <div class="col">
                    <h3>コンテンツ2</h3>
                    <p>この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、</p>
                    <button type="button" class="btn btn-secondary">
                        <a href="#" class="text-white">MORE</a>
                    </button>
                    </div>
                    <div class="col">
                    <h3>コンテンツ3</h3>
                    <p>この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、</p>
                    <button type="button" class="btn btn-secondary">
                        <a href="#" class="text-white">MORE</a>
                    </button>
                </div>
            </div>
        </div>
</x-layout-top>