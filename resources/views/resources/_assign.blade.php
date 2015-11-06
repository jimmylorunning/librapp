<div class="resources">
  <h2>Resources:</h2>
  @foreach ($resources as $resource)
      <?php $resource_name = $resource->pattern . ' (' . $resource->verb . ')'; ?> 
      {!! Form::field(['type' => 'checkbox', 'name' => "resource_id[]", 'label' => $resource_name, 'id' => $resource->id, 'value' => $role->resources->contains($resource->id)]) !!}
  @endforeach
</div>