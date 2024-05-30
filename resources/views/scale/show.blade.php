<x-layout title="syiox - {{ $scale->name}}">
    <div class="container show-container">
        <div>
            <div class="attributes">
                <div class="attribute">
                    <span>name:</span>
                    <span>{{ $scale->name }}</span>
                </div>

                <div class="attribute">
                    <span>external ID:</span>
                    <span>{{ $scale->external_id }}</span>
                </div>

                <div class="attribute">
                    <span>max weight:</span>
                    <span>{{ $scale->max_weight }}</span>
                </div>

                <div class="attribute">
                    <span>status:</span>
                    <span>{{ $scale->status }}</span>
                </div>

                <div class="attribute">
                    <span>description</span>
                    <span>{{ $scale->description }}</span>
                </div>
            </div>

            <div class="actions">
                <a class="anchor-button" href="{{ route("scales.edit", ['scale' => $scale->id]) }}"><i class="fa-regular fa-pen-to-square"></i></a>

                <form action="{{ route('scales.destroy', ['scale' => $scale->id]) }}" method="POST">
                    @csrf
                    @method('DELETE')

                    <button class="form-button">
                        <i class="fa-regular fa-trash-can"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
