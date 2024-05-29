<x-layout title="syiox - edit {{ $scale->name}}">
    <div class="create-holder">
        <form action="{{ route('scales.update', ['scale' => $scale->id]) }}" method="POST">
            @csrf
            @method('PATCH')

            <div>
                <label for="name">name</label>

                <input type="text" name="name" id="name" placeholder="name" value="{{ $scale->name }}"
                       class="@error('name') is-invalid @else is-valid @enderror"
                />

                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="external_id">external id</label>

                <input type="text" name="external_id" id="external_id" placeholder="external id" value="{{ $scale->external_id }}"
                       class="@error('external_id') is-invalid @else is-valid @enderror"
                />

                @error('external_id')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="max_weight">max weight</label>

                <input type="number" name="max_weight" id="max_weight" placeholder="max weight" value="{{ $scale->max_weight }}"
                       class="@error('max_weight') is-invalid @else is-valid @enderror"
                />

                @error('max_weight')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <input type="submit" value="Update" />
            </div>
        </form>
    </div>
</x-layout>
