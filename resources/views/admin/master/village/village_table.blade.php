<div class="card card-primary table-responsive"> 
                             <table id="district_table" class="table table-striped table-hover control-label">
                                 <thead>
                                     <tr>
                                         <th class="text-nowrap">States</th>
                                         <th class="text-nowrap">District</th>
                                         <th class="text-nowrap">Block MCS</th>
                                         <th class="text-nowrap">Village Code</th>
                                         <th class="text-nowrap">Village Name</th>
                                         <th class="text-nowrap">House Holds</th>
                                         <th class="text-nowrap">Population</th>
                                         <th class="text-nowrap">CHC ID</th>
                                         <th class="text-nowrap">PHC ID</th>
                                         
                                         <th class="text-nowrap">Action</th>
                                          
                                     </tr>
                                 </thead>
                                 <tbody>
                                    @foreach ($Villages as $Village)
                                     
                                     <tr>
                                         <td>{{ $Village->states->name_e or '' }}</td>
                                         <td>{{ $Village->district->name_e or '' }}</td>
                                         <td>{{ $Village->blockMCS->name_e or '' }}</td>
                                         <td>{{ $Village->code }}</td>
                                         <td>{{ $Village->name_e }}</td>
                                         <td>{{ $Village->house_holds }}</td>
                                         <td>{{ $Village->population }}</td>
                                         <td>{{ $Village->chc_id }}</td>
                                         <td>{{ $Village->phc_id }}</td>
                                          
                                         <td class="text-nowrap">
                                             
                                             <a onclick="callPopupLarge(this,'{{ route('admin.Master.village.edit',$Village->id) }}')" title="Edit" class="btn btn-info btn-xs"><i class="fa fa-edit"></i></a>
                                             <a href="#" success-popup="true" select-triger="block_select_box" onclick="callAjax(this,'{{ route('admin.Master.village.delete',$Village->id) }}')" title="Delete" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
                                         </td>
                                     </tr> 
                                    @endforeach
                                 </tbody>
                             </table>
                        </div> 