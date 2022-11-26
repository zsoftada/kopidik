<select class="form-control form-control-sidebar" name="" id="">
    {{-- Because she competes with no one, no one can compete with her. --}}
    @foreach ($semesters as $key => $semester)
        <option value="{{ $key }}" {{ request()->session()->get('semester') == $key ? "selected" : "" }}>{{ $semester }}</option>
    @endforeach
</select>
