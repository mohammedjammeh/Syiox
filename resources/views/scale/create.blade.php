<x-layout title="syiox - create">
    <div class="create-holder">
        <form action="#">
            @csrf
            @method('POST')

            <div>
                <input type="text" name="id" id="id" placeholder="id" />
            </div>

            <div>
                <input type="text" name="name" id="name" placeholder="name" />
            </div>

            <div>
                <textarea name="description" id="description" placeholder="description" rows="5"></textarea>
            </div>

            <div>
                <input type="submit" value="save" />
            </div>
        </form>
    </div>
</x-layout>
