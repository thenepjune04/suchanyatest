<div>
  <!-- <strong>Name : </strong> -->
  <!-- <input
      type="text"
      name="name"
      value="{{ isset($vehicle->name) ?  $vehicle->name : '' }}"
      placeholder="name here..."
      /> -->
</div>
<!-- <div>
  <strong>id: </strong>
  <input type="number" name="id" value="{{ isset($vehicle->id) ? $vehicle->id: '' }}" placeholder="id here..." />
</div> -->
<div>
  <strong>brand : </strong>
  <input type="text" name="brand" value="{{ isset($vehicle->brand) ? $vehicle->brand : '' }}" placeholder="brand here..." />
</div>
<div>
  <strong>series : </strong>
  <input type="text" name="series" value="{{  isset($vehicle->series) ?  $vehicle->series : '' }}" placeholder="series here..."  />
</div>
<div>
  <strong>colour : </strong>
  <input type="text" name="colour" value="{{ isset($vehicle->colour) ?  $vehicle->colour : '' }}" placeholder="colour here..." />
</div>
<div>
  <strong>year : </strong>
  <input type="number" name="year" value="{{ isset($vehicle->year) ?  $vehicle->year : '' }}" placeholder="year here..." />
</div>
<div>
  <strong>mileage: </strong>
  <input type="number" name="mileage" value="{{ isset($vehicle->mileage) ?  $vehicle->mileage : '' }}" placeholder="mileage here..." />
</div>


