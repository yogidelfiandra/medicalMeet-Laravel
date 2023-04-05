@extends('layouts.default')

@section('title', 'Home')

@section('content')

<main class="min-h-screen">

	<!-- Hero -->
	<section class="relative mt-12">
		<!-- Hero Image -->
		<div class="hidden lg:block lg:absolute lg:z-10 lg:top-0 lg:right-0" aria-hidden="true">
			<img src="{{ asset('/assets/frontsite/images/hero-image.png') }}"
				class="bg-cover bg-center object-cover object-center max-h-[580px]" alt="Hero Image" />
			<div
				class="text-center absolute bottom-0 -left-20 -translate-y-14 bg-white px-7 py-5 rounded-xl shadow-2xl">
				<h5 class="font-medium text-[#1E2B4F]">Dr. Kartika Me</h5>
				<p class="text-xs text-[#AFAEC3] mt-1">Nutrionist</p>
				<span
					class="block text-xs text-[#1E2B4F] font-medium bg-[#F2F6FE] px-4 py-2 rounded-full text-center mt-7">
					Book Now
				</span>
			</div>
		</div>

		<!-- Hero Description -->
		<div class="relative mx-auto max-w-7xl px-4 lg:px-14 lg:py-16">
			<div class="lg:grid lg:grid-cols-12 lg:gap-8">
				<div class="lg:col-span-6">

					<!-- Label New -->
					<h1>
						<div class="flex items-center">
							<span class="text-white text-xs sm:text-sm font-medium bg-[#2AB49B] rounded-full px-8 py-2">
								New
							</span>
							<span
								class="text-[#1E2B4F] text-[11px] sm:text-sm bg-[#F2F6FE] rounded-r-full px-8 py-2 relative -z-10 -ml-4">
								Emergency call feature updated
							</span>
						</div>

						<span class="mt-6 block text-4xl font-semibold sm:text-5xl">
							<span class="block text-[#1E2B4F] leading-normal">
								Meet Your Doctor. <br />Trusted & Professional.
							</span>
						</span>
					</h1>
					<!-- End Label New -->

					<!-- Text -->
					<div class="flex flex-wrap gap-16 mt-8">
						<div class="flex items-center gap-4">
							<div class="flex-shrink-0">
								<img src="{{ asset('/assets/frontsite/images/service.svg') }}" alt="service icon" />
							</div>
							<div>
								<h5 class="text-[#1E2B4F] text-lg font-medium">Best Recipe</h5>
								<p class="text-[#AFAEC3]">for your medicine</p>
							</div>
						</div>
						<div class="flex items-center gap-4">
							<div class="flex-shrink-0">
								<img src="{{ asset('/assets/frontsite/images/service.svg') }}" alt="service icon" />
							</div>
							<div>
								<h5 class="text-[#1E2B4F] text-lg font-medium">Free Consultation</h5>
								<p class="text-[#AFAEC3]">as we promised</p>
							</div>
						</div>
					</div>
					<!-- Text -->

					<!-- CTA Button -->
					<div class="grid lg:flex flex-wrap mt-20 gap-5">
						<a href="{{ route('register') }}"
							class="text-white text-lg font-medium text-center bg-[#0D63F3] rounded-full px-12 py-3">
							Sign Up
						</a>
						<a href="#"
							class="text-[#0D63F3] text-lg font-medium text-center bg-[#F2F6FE] rounded-full px-16 py-3">
							Story
						</a>
					</div>
					<!-- CTA Button -->

				</div>
			</div>
		</div>
	</section>
	<!-- End Hero -->

	<!-- Popular Categories -->
	<section class="mt-32 bg-[#F9FBFC]">
		<div class="mx-auto max-w-7xl px-4 lg:px-14 py-16">
			<h3 class="text-2xl text-[#1E2B4F] font-semibold">Popular Categories</h3>
			<p class="text-[#A7B0B5] mt-2">Quick way to get your first experience</p>

			<div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 sm:gap-8 md:gap-10 lg:gap-12 mt-10">
				{{-- @forelse($specialist as $key => $specialist_item) --}}
				<!-- Card -->
				{{-- <a href="#"
					class="bg-white py-6 px-5 rounded-2xl transition hover:ring-offset-2 hover:ring-2 hover:ring-[#0D63F3]">
					<h5 class="text-[#1E2B4F] text-lg font-semibold">{{ $specialist_item->name ?? '' }}</h5>
					<p class="text-[#AFAEC3] mt-1">143 doctors</p>
				</a> --}}
				<!-- End Card -->
				{{-- @empty --}}
				{{-- empty --}}
				{{-- @endforelse --}}
			</div>

		</div>
	</section>
	<!-- End Popular Categories -->

	<!-- Best Doctors -->
	<section class="mt-4 lg:mt-16">
		<div class="mx-auto max-w-7xl px-4 lg:px-14 py-14">
			<h3 class="text-[#1E2B4F] text-2xl font-semibold">Best Doctors</h3>
			<p class="text-[#A7B0B5] mt-2">Help your life much better</p>

			<!-- Card -->
			<div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-12 lg:gap-10 mt-10">

				{{-- @forelse($doctor as $key => $doctor_item) --}}

				{{-- <a href="{{ route('appointment.doctor', $doctor_item->id) }}" class="group">
					<div class="relative z-10 w-full h-[350px] rounded-2xl overflow-hidden">
						<img src="{{ url(Storage::url($doctor_item->photo)) }}"
							class="w-full h-full bg-center bg-no-repeat object-cover object-center"
							alt="{{ $doctor_item->name ?? '' }}">
						<div
							class="opacity-0 group-hover:opacity-100 transition-all ease-in absolute inset-0 bg-[#0D63F3] bg-opacity-70 flex justify-center items-center">
							<span class="text-[#0D63F3] font-medium bg-white rounded-full px-8 py-3">Book Now</span>
						</div>
					</div>

					<div class="flex items-center justify-between mt-5">
						<div>
							<div class="text-[#1E2B4F] text-lg font-semibold">{{ $doctor_item->name ?? '' }}</div>
							<div class="text-[#AFAEC3] mt-1">{{ $doctor_item->specialist->name ?? '' }}</div>
						</div>
						<div class="flex items-center space-x-2">
							<img src="{{ asset('/assets/frontsite/images/star.svg') }}" alt="Star">
							<span class="block text-[#1E2B4F] font-medium">4.5</span>
						</div>
					</div>
				</a> --}}

				{{-- @empty --}}

				{{-- empty --}}

				{{-- @endforelse --}}

			</div>
			<!-- End Card -->
		</div>
	</section>
	<!-- End Best Doctors -->

	<!-- Services -->
	<section class="mt-10 lg:mt-16">
		<div class="mx-auto max-w-7xl px-4 lg:px-14 py-14">

			<div class="lg:flex justify-center items-center gap-16">
				<div class="hidden lg:block max-h-[600px] overflow-hidden">
					<img src="{{ asset('/assets/frontsite/images/services.png') }}"
						class="w-full h-full bg-center bg-no-repeat object-cover object-center" alt="services-image">
				</div>

				<div class="text-center mt-20 lg:text-left lg:mt-0">
					<span class="text-[#0D63F3] text-lg font-medium">
						Our Extra Services
					</span>


					<h3 class="text-[#1E2B4F] text-2xl font-semibold">
						3 Reasons Why You Should <br class="hidden lg:block"> Choose Our Services
					</h3>

					<div class="pt-4">
						<div class="flex flex-col lg:flex-row items-center gap-5 px-8 py-6 mt-6">
							<img src="{{ asset('/assets/frontsite/images/item-1.svg') }}" alt="item-1">
							<div class="text-center lg:text-left">
								<p class="text-base text-[#1E2B4F] font-semibold">No Need to Queue</p>
								<p class="text-base text-[#808997] font-normal">Lorem Ipsum is simply dummy text <br
										class="hidden lg:block">
									of the printing typesetting industry.
								</p>
							</div>
						</div>
						<div class="flex flex-col lg:flex-row items-center gap-5 px-8 py-6 mt-6">
							<img src="{{ asset('/assets/frontsite/images/item-2.svg') }}" alt="item-2">
							<div class="text-center lg:text-left">
								<p class="text-base text-[#1E2B4F] font-semibold">Fast and Easy Process</p>
								<p class="text-base text-[#808997] font-normal">Lorem Ipsum is simply dummy text <br
										class="hidden lg:block">
									of the printing typesetting industry.
								</p>
							</div>
						</div>
						<div class="flex flex-col lg:flex-row items-center gap-5 px-8 py-6 mt-6">
							<img src="{{ asset('/assets/frontsite/images/item-3.svg') }}" alt="item-3">
							<div class="text-center lg:text-left">
								<p class="text-base text-[#1E2B4F] font-semibold">Price is Very Affordable</p>
								<p class="text-base text-[#808997] font-normal">Lorem Ipsum is simply dummy text <br
										class="hidden lg:block">
									of the printing typesetting industry.
								</p>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End Services -->

	<!-- Articles -->
	<section class="mt-10 lg:mt-16">
		<div class="mx-auto max-w-7xl px-4 lg:px-14 py-14">
			<div class="flex justify-between items-center">
				<div class="text-center lg:text-left">
					<span class="text-[#0D63F3] text-lg font-medium">
						Latest Articles
					</span>


					<h3 class="text-[#1E2B4F] text-2xl font-semibold">
						Useful Article For You to Read
					</h3>
				</div>
				<a href="#"
					class="hidden lg:block px-8 py-3 text-base font-medium rounded-full bg-[#F2F6FE] text-[#0D63F3] hover:bg-[#0D63F3] hover:text-white transition">
					See More Article
				</a>
			</div>

			<!-- Card -->
			<div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-12 lg:gap-9 mt-10">
				<div class="card">
					<img src="{{ asset('/assets/frontsite/images/article-1.png') }}" alt="article-1">
					<div class="card-body mx-4 mt-4">
						<div class="flex text-sm font-medium">
							<span class="text-[#0D63F3]">Healthy Living</span>
							<span class="text-[#808997] ml-1">• 2 min read</span>
						</div>
						<h5 class="text-base font-semibold mt-1 text-[#1E2B4F]">How to Reduce Dizziness in The Back of
							The Head</h5>
						<div class="card-profile flex items-center gap-2 mt-2 mb-7">
							<img src="{{ asset('/assets/frontsite/images/profile-1.png') }}"
								class="w-6 h-6 rounded-full" alt="profile-1">
							<p class="text-base font-normal text-[#808997]">Dr. Bambang</p>
						</div>
						<a href="#"
							class="flex py-3 justify-center text-base font-medium rounded-full bg-[#F2F6FE] text-[#0D63F3] hover:bg-[#0D63F3] hover:text-white transition">
							Read Now
						</a>
					</div>
				</div>
				<div class="card">
					<img src="{{ asset('/assets/frontsite/images/article-2.png') }}" alt="article-2">
					<div class="card-body mx-4 mt-4">
						<div class="flex text-sm font-medium">
							<span class="text-[#0D63F3]">Healthy Living</span>
							<span class="text-[#808997] ml-1">• 3 min read</span>
						</div>
						<h5 class="text-base font-semibold mt-1 text-[#1E2B4F]">How to Take Good Care of Your Scalp Hair
							& strengthen
						</h5>
						<div class="card-profile flex items-center gap-2 mt-2 mb-7">
							<img src="{{ asset('/assets/frontsite/images/profile-2.png') }}"
								class="w-6 h-6 rounded-full" alt="profile-2">
							<p class="text-base font-normal text-[#808997]">Dr. Annie</p>
						</div>
						<a href="#"
							class="flex py-3 justify-center text-base font-medium rounded-full bg-[#F2F6FE] text-[#0D63F3] hover:bg-[#0D63F3] hover:text-white transition">
							Read Now
						</a>
					</div>
				</div>
				<div class="card">
					<img src="{{ asset('/assets/frontsite/images/article-3.png') }}" alt="article-3">
					<div class="card-body mx-4 mt-4">
						<div class="flex text-sm font-medium">
							<span class="text-[#0D63F3]">Healthy Living</span>
							<span class="text-[#808997] ml-1">• 6 min read</span>
						</div>
						<h5 class="text-base font-semibold mt-1 text-[#1E2B4F]">How to Keep Your Baby's Womb Healthy
						</h5>
						<div class="card-profile flex items-center gap-2 mt-2 mb-7">
							<img src="{{ asset('/assets/frontsite/images/profile-2.png') }}"
								class="w-6 h-6 rounded-full" alt="profile-2">
							<p class="text-base font-normal text-[#808997]">Dr. Annie</p>
						</div>
						<a href="#"
							class="flex py-3 justify-center text-base font-medium rounded-full bg-[#F2F6FE] text-[#0D63F3] hover:bg-[#0D63F3] hover:text-white transition">
							Read Now
						</a>
					</div>
				</div>
				<div class="card">
					<img src="{{ asset('/assets/frontsite/images/article-4.png') }}" alt="article-4">
					<div class="card-body mx-4 mt-4">
						<div class="flex text-sm font-medium">
							<span class="text-[#0D63F3]">Healthy Living</span>
							<span class="text-[#808997] ml-1">• 2 min read</span>
						</div>
						<h5 class="text-base font-semibold mt-1 text-[#1E2B4F]">How to Refresh and Brighten Your Face
							For 7 Days</h5>
						<div class="card-profile flex items-center gap-2 mt-2 mb-7">
							<img src="{{ asset('/assets/frontsite/images/profile-3.png') }}"
								class="w-6 h-6 rounded-full" alt="profile-3">
							<p class="text-base font-normal text-[#808997]">Dr. Sage Skye</p>
						</div>
						<a href="#"
							class="flex py-3 justify-center text-base font-medium rounded-full bg-[#F2F6FE] text-[#0D63F3] hover:bg-[#0D63F3] hover:text-white transition">
							Read Now
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Articles -->

	<!-- Testimonials -->
	<section class="mt-16">
		<div class="mx-auto max-w-7xl px-4 lg:px-14 py-14">
			<div class="lg:flex justify-center items-center gap-x-40">
				<!-- Testimonial Description -->
				<div class="text-center mt-20 lg:text-left lg:mt-0">
					<span class="text-[#0D63F3] text-lg font-medium">
						What They Say About Us
					</span>


					<h3 class="text-[#1E2B4F] text-2xl font-semibold">
						Happy Patients Tell Us Something
					</h3>

					<div class="pt-8">
						<div class="card py-5 px-4 max-w-xl mx-auto">
							<div class="card-head flex justify-between">
								<div class="profile flex items-center gap-x-3">
									<img src="{{ asset('/assets/frontsite/images/testimonial-1.png') }}"
										class="w-[42px] h-[42px] rounded-xl" alt="testimonial">
									<p class="text-lg font-semibold text-[#1E2B4F]">Yogi Delfiandra</p>
								</div>
								<div class="rating flex items-center">
									<img src="{{ asset('/assets/frontsite/images/star.svg') }}" alt="rating">
									<img src="{{ asset('/assets/frontsite/images/star.svg') }}" alt="rating">
									<img src="{{ asset('/assets/frontsite/images/star.svg') }}" alt="rating">
									<img src="{{ asset('/assets/frontsite/images/star.svg') }}" alt="rating">
									<img src="{{ asset('/assets/frontsite/images/star.svg') }}" alt="rating">
								</div>
							</div>
							<div class="card-body mt-4">
								<p class="text-[#808997] text-lg font-normal">
									“Lorem Ipsum is simply dummy text the printing industry.
									Lorem Ipsum has been the industry's standard dummy text ever
									since the 1500s”
								</p>
							</div>
						</div>

						<div class="card py-5 px-4 max-w-xl mb-7 mx-auto">
							<div class="card-head flex justify-between">
								<div class="profile flex items-center gap-x-3">
									<img src="{{ asset('/assets/frontsite/images/testimonial-2.png') }}"
										class="w-[42px] h-[42px] rounded-xl" alt="testimonial">
									<p class="text-lg font-semibold text-[#1E2B4F]">Shayna</p>
								</div>
								<div class="rating flex items-center">
									<img src="{{ asset('/assets/frontsite/images/star.svg') }}" alt="rating">
									<img src="{{ asset('/assets/frontsite/images/star.svg') }}" alt="rating">
									<img src="{{ asset('/assets/frontsite/images/star.svg') }}" alt="rating">
									<img src="{{ asset('/assets/frontsite/images/star.svg') }}" alt="rating">
									<img src="{{ asset('/assets/frontsite/images/star.svg') }}" alt="rating">
								</div>
							</div>
							<div class="card-body mt-4">
								<p class="text-[#808997] text-lg font-normal">
									“Lorem Ipsum is simply dummy text the printing industry.
									Lorem Ipsum has been the industry's standard dummy text ever
									since the 1500s”
								</p>
							</div>
						</div>

						<a href="#"
							class="px-8 py-3 rounded-full text-base font-medium bg-[#F2F6FE] text-[#0D63F3] hover:bg-[#0D63F3] hover:text-white transition">
							See More Stories
						</a>

					</div>
				</div>

				<!-- Testimonial Image -->
				<div class="hidden relative lg:block lg:z-10 lg:top-0 lg:right-0" aria-hidden="true">
					<img src="{{ asset('/assets/frontsite/images/testimonial.png') }}"
						class="bg-cover bg-center object-cover object-center max-h-[580px]" alt="testimonial-image" />
					<div class="text-center flex flex-col absolute top-0 bg-white px-7 py-5 rounded-xl shadow-2xl">
						<img src="{{ asset('/assets/frontsite/images/patient.svg') }}" class="w-16 h-16"
							alt="patient-icon">
						<h5 class="text-2xl font-semibold text-[#1E2B4F] mt-3">250.000+</h5>
						<p class="text-lg font-normal text-[#AFAEC3] mt-1">Total Patient</p>

					</div>
				</div>
			</div>
		</div>





	</section>
	<!-- End Testimonials -->

</main>

@endsection