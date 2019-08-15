<div>
  <strong>Name : </strong>
  <input
      type="text"
      name="name"
      value="{{ isset($positions->name) ?  $positions->name : '' }}"
      placeholder="name here..."
      />
</div>

<div>
  <strong>Description : </strong>
  <input type="text" name="Description" value="{{ isset($positions->description) ? $positions->Description : '' }}" placeholder="Description..." />
</div>



