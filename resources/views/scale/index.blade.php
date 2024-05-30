<x-layout title="syiox home">
    <div class="container index-container">
        <div>
            <table>
                <thead>
                    <tr>
                        <td>name</td>
                        <td>leftover (%)</td>
                        <td>external id</td>
                        <td>actions</td>
                    </tr>
                </thead>

                <tbody>

                @foreach ($scales as $scale)
                    <tr>
                        <td>{{ $scale->name }}</td>
                        <td>{{ $scale->leftover }}</td>
                        <td>{{ $scale->external_id }}</td>
                        <td>
                            <a class="anchor-button" href="{{ route("scales.show", ['scale' => $scale->id]) }}"><i class="fa-regular fa-eye"></i></a>

                            <a class="anchor-button" href="{{ route("scales.edit", ['scale' => $scale->id]) }}"><i class="fa-regular fa-pen-to-square"></i></a>

                            <form action="{{ route('scales.destroy', ['scale' => $scale->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <button class="form-button">
                                    <i class="fa-regular fa-trash-can"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>

            <div class="add-scale">
                <a class="anchor-button" href="{{ route("scales.create") }}"><i class="fa-regular fa-square-plus"></i></a>
            </div>
        </div>
    </div>
</x-layout>
