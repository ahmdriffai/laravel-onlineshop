<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <strong>{{ $message }}</strong>
        </div>
        @endif

        @if ($message = Session::get('error'))
        <div class="alert alert-danger alert-block">
            <strong>{{ $message }}</strong>
        </div>
        @endif
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <h5 class="card-header">User</h5>
                    <div class="card-body">
                        <form method="POST" action="{{ route('super-admin.generate-user') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="number" class="form-label">Jumlah Generate</label>
                                <input type="number" class="form-control" name="number" id="number" placeholder="number">
                            </div>

                            <button type="submit" class="btn btn-primary">Generate</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <h5 class="card-header">Rating User</h5>
                    <div class="card-body">
                        <form method="POST" action="{{ route('super-admin.make-rating') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="number" class="form-label">User</label>
                                <select class="form-select" name="user_id" aria-label="Default select example">
                                    <option selected>Pilih User</option>
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->id }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="number"  class="form-label">Produk</label>
                                <select class="form-select" name="product_id" aria-label="Default select example">
                                    <option selected>Pilih Produk</option>
                                    @php
                                        $p = 1;
                                    @endphp
                                    @foreach ($products as $product)
                                        <option value="{{ $product->id }}"> {{ $p }}</option>
                                        @php
                                            $p++;
                                        @endphp
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="number" class="form-label">Rating</label>
                                <div class="d-flex justify-content-between">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="rating" value="0.5" name="flexRadioDefault" id="0.5">
                                        <label class="form-check-label" for="0.5">1</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="rating" value="1" name="flexRadioDefault" id="1">
                                        <label class="form-check-label" for="1">2</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="rating" value="1.5" name="flexRadioDefault" id="1.5">
                                        <label class="form-check-label" for="1.5">3</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="rating" value="2" name="flexRadioDefault" id="2">
                                        <label class="form-check-label" for="2">4</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="rating" value="2.5" name="flexRadioDefault" id="2.5">
                                        <label class="form-check-label" for="2.5">5</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="rating" value="3" name="flexRadioDefault" id="3">
                                        <label class="form-check-label" for="3">6</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="rating" value="3.5" name="flexRadioDefault" id="3.5">
                                        <label class="form-check-label" for="3.5">7</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="rating" value="4" name="flexRadioDefault" id="4">
                                        <label class="form-check-label" for="4">8</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="rating" value="4.5" name="flexRadioDefault" id="4.5">
                                        <label class="form-check-label" for="4.5">9</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="rating" value="5" name="flexRadioDefault" id="5">
                                        <label class="form-check-label" for="5">10</label>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Make</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card">
                    <h5 class="card-header">User Rating Given</h5>
                    <div class="card-body">
                        <div class="table-responsive">
                        <table class="table table-hover" width="100%">
                            <tr>
                                <td>#</td>
                                @foreach ($products as $product)
                                <td>{{ $product->name }}</td>
                                @endforeach
                            </tr>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($users as $user)
                            <tr>
                                <td>{{ $i }} . {{ $user->name }}</td>
                                @foreach ($products as $product)
                                    @php
                                        $rating = App\Rating::where('user_id', $user->id)->where('product_id', $product->id)->first()
                                    @endphp
                                    @if ($rating !== null)
                                        <td>{{ $rating->rating }} </td>
                                    @else
                                        <td>-</td>
                                    @endif

                                @endforeach
                            </tr>
                            @php
                                $i++;
                            @endphp
                            @endforeach
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
