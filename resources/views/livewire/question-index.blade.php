<div>
<div class="row    layout-top-spacing"  >
    
<div class="col-lg-12">
<div id="tableCheckbox" class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                <div class="d-flex justify-content-between">
                                    <h3 class="">Questions List</h3>
                                   <button type="submit" data-toggle="modal" data-target=".bd-example-modal-lg" class=" btn btn-primary">Add Question</button>
                                </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-striped table-checkable table-highlight-head mb-4">
                                            <thead>
                                                <tr>
                                                    <th>No.</th>
                                              
                                                    <th class="">Questions</th>
                                                    
                                                    <th class="">Status</th>
                                                    <th class="text-center">Icons</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($questions as $question)
                                                    
                                                <tr>
                                                   <td> {{ $question->id }} </td>
                                                    <td >
                                                        <div class="question-image">

                                                            <p class="mb-0">  {!!  $question->question !!}  </p>
                                                        </div>
                                                    </td>
                                                   
                                                    <td>
                                                    @if($question->status == "Approved")
                                                    <button  wire:click="Unapproved({{$question->id}})"  class="btn btn-primary mb-2">

                                                    <span style="width: 25px; height:25px" wire:loading wire:target ="Unapproved({{$question->id}})"
                                        class="spinner-border text-white mr-2 align-self-center loader-sm "></span>
                                    <span  wire:target ="Unapproved({{$question->id}})"  wire:loading.class="display-none">Approved</span>
                                                        
                                                    
                                                    </button>
                                                    @else 
                                                    <button wire:click="Approved({{$question->id}})" class="btn btn-danger mb-2">
                                                        

                                                    <span style="width: 25px; height:25px" wire:loading wire:target="Approved({{$question->id}})"
                                        class="spinner-border text-white mr-2 align-self-center loader-sm "></span>
                                    <span wire:target="Approved({{$question->id}})" wire:loading.class="display-none">UnApproved</span>

                                                    </button>
                                                    @endif
                                                    </td>

                                                    <td class="text-center">
                                                        <ul class="table-controls">
                                                             <li><a href="{{ route('editGame', $question->id) }}" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 text-success"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a></li>
                                                            <li><a data-toggle="modal" data-target="#fadeinModal" wire:click="DeletedQuestionID({{$question->id}})" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 text-danger"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></a></li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                @endforeach
                                             
                                            </tbody>
                                        </table>
                                    </div>

                                 
                                </div>
                            </div>
                        </div>
        
</div>
</div>


<!-- Delete Modal -->


<div id="fadeinModal"  wire:ignore.self class="modal animated fadeInDown show"  aria-modal="true" role="dialog">
                                            <div class="modal-dialog">
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title text-danger">Delete Confirmation</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                          <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                                        </button>
                                                    </div>

                                                    <div class="modal-body">
                                                          <p class="modal-text text-danger">Are you sure want to delete this question??????</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
                                                        <button type="button" class="btn btn-danger" wire:click="DeleteQuestion">
                                                            
                                                        <span style="width: 25px; height:25px" wire:loading wire:target="DeleteQuestion"
                                        class="spinner-border text-white mr-2 align-self-center loader-sm "></span>
                                    <span wire:loading.class="display-none">Delete</span>

                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>





        <div class="modal fade bd-example-modal-lg show" id="quesm" tabindex="-1" aria-labelledby="myLargeModalLabel"  aria-modal="true" role="dialog">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="myLargeModalLabel">Add Questins</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('storeGame') }} " method="post">
                                                        @csrf
                                                    <div class="question">

                                                        <textarea id="editor1" name="question" cols="100" rows="100" width:100%="" style="visibility: hidden; display: none;"> </textarea>
                                                        @error('question') <span class="text-danger ">{{ $message }}</span> @enderror
                                                    </div>
                                                    <div class="form-row mb-2 mt-2">
                                            <div class="col-sm-6">
                                              <input type="text" class="form-control" name="first" placeholder="First Option">
                                              @error('first') <span class="text-danger ">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="col-sm-6">
                                              <input type="text" name="second" class="form-control" placeholder="Second Option">
                                              @error('second') <span class="text-danger ">{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                        <div class="form-row mb-2 mt-2">
                                            <div class="col-sm-6">
                                              <input type="text" name="third" class="form-control" placeholder="Third Option name">
                                              @error('third') <span class="text-danger ">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="col-sm-6">
                                              <input type="text" name="fourth" class="form-control" placeholder="Fourth Option">
                                              @error('fourth') <span class="text-danger ">{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                        <div class="form-row mb-2 mt-2">
                                          
                                            <div class="col-sm-12">
                                           <select name="answers" class="form-control" id="">
                                               <option value="1">First</option>
                                               <option value="2">Second</option>
                                               <option value="3">Third</option>
                                               <option value="4">Fourth</option>
                                           </select>
                                            </div>
                                            @error('answers') <span class="text-danger ">{{ $message }}</span> @enderror
                                        </div>
                                        
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
                                                    <button type="submit" class="btn btn-primary">Save</button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>


                                    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace('editor1', {
    filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
    filebrowserUploadMethod: 'form'
});
</script>





</div>
