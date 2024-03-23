<x-outer-layout>
            	<!-- Start Hero Section -->
			<div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
								<h1>All users</h1>
							</div>
						</div>
						<div class="col-lg-7">
							
						</div>
					</div>
				</div>
			</div>
		<!-- End Hero Section -->
            <!-- Start Product Section -->
    <div class="product-section">
        <div class="container">
            <div class="row">
                <table>
                    <thead>
                        <th>
                            SL.NO
                        </th>
                        <th>
                            Full Name
                        </th>
                        <th>
                            Roles
                        </th>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @forelse ($allUsers as $item)
                            <tr>
                               <td>
                                {{$i++}}
                                </td> 
                                <td>
                                    
                                    {{$item->name}}
                                </td>
                                <td>
                                    <ul>
                                    @forelse ($item->roles as $r)
                                        <li>
                                            {{$r->role}}
                                        </li>
                                    @empty
                                    
                                    @endforelse
                                    </ul>
                                    {{-- {{$item->roles->role}} --}}
                                </td>
                            </tr>
                        
                        @empty
                            
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-outer-layout>
