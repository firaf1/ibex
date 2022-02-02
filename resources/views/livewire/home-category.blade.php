<div>
<div class="row">
                             <div class="col-md-12">
                                 <h2 class="mt-0 line-height-1 text-center text-uppercase mb-10 text-black-333">አይቤክስ
                                     <span class="text-theme-color-2"> vlog </span>
                                 </h2>
                                 <p class="pb-20">የተሟላ የቪዲዮ መዝናኛ እና መረጃዎች<br></p>
                                 <!-- Works Filter -->
                                 <div class="portfolio-filter text-center mb-40" data-link-with="grid-petcare-gallery">
                              
                                 <a href="" wire:click="allCat" class="  <?php if($index == -1) echo'active';  ?> mb-sm-10" data-filter="*">
                                         <font color="red">All</font>
                                     </a>

                                 @foreach ($categories as $category)
                                 <a href="" class="<?php if($index == $category->id) echo'active';  ?>"   wire:click="CatVl({{$category->id}})" >
                                         <font color="red">{{ $category->title }}</font>
                                     </a>
                                 @endforeach
                                </div>
                          <div class="loader11"  wire:loading wire:target="CatVl, allCat"  ></div> 

                                 <div id="grid-petcare-gallery row" class="gallery-isotope grid-4 gutter clearfix"   wire:loading.class="display-none" >
     @if ($vlogs->count() == 0)
         <h2 class="text-danger">Sorry no Videos is Found </h2>
     @endif
                                     @foreach ($vlogs as $vlog)
                          
                                  <div class="gallery-item law col-sm-4">
                                       <div class="item">
                                         <div class="project mb-30 border-2px">
                     
                                        {!! $vlog->video !!}
                     
                                       <div class="project-details ">
                                         <h4 class="font-weight-700 text-uppercase mt-0"><a  >{{ Str::limit( $vlog->title , 25, ' ...')}}</a></h4>
                                           </div>
                                         </div>
                                       </div>
                                     </div>
                                      
                                
                                         
                                     
                                     @endforeach
                       <!--
                <!-- Portfolio Item End -->

                                     <!-- Portfolio Item Start
                <div class="gallery-item computer">
                  <div class="item">
                    <div class="project mb-30 border-2px">

                        <iframe height="312" src="https://www.youtube.com/embed/GSv9gTzGcl0" width="275" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                  <div class="project-details p-15 pt-10 pb-10">
                    <h4 class="font-weight-700 text-uppercase mt-0"><a href="course5.html">የኢንተርኔት መረጃ መግብያ</a></h4>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->

                    
                <!-- Portfolio Item End -->

                    
                <!-- Portfolio Item End -->
 
                                    </div>
                                 <!-- End Portfolio Gallery Grid -->
                             </div>
                         </div>
</div>
