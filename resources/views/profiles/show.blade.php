<x-app-layout>
    <header class="mb-6 relative">
        <div class="relative">
            <img src="/images/default-profile-banner.jpg"
                 alt=""
                 class="mb-2"
            >

            <img src="{{ $user->avatar }}"
                 alt="user profile"
                 class="rounded-full mr-2 absolute bottom-6 transform -translate-x-1/2 translate-y-1/2 border border-black"
                 style="left: 15%"
                 width="120"
            >
        </div>

        <div class="flex justify-between items-center mt-10 mb-6">
            <div style="max-width: 270px">
                <h2 class="font-bold text-2xl mb-0">{{ $user->name }}</h2>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>

            <div class="flex">
                @can ('edit', $user)
                    <a href="{{ $user->path('edit') }}"
                       class="rounded-full border border-gray-300 py-2 px-4 text-black text-xs mr-2"
                    >
                        Edit Profile
                    </a>
                @endcan
                <x-follow-button :user="$user"></x-follow-button>
            </div>
        </div>

        <p class="text-sm">
            The name’s Bugs. Bugs Bunny. Don’t wear it out. Bugs is an anthropomorphic gray
            and white rabbit or hare who is famous for his flippant, insouciant personality.
            He is also characterized by a Brooklyn accent, his portrayal as a trickster,
            and his catch phrase "Eh...What's up, doc?"
        </p>


    </header>

    <hr>

    @include('_timeline')

    <div class="pt-4">
        {{ $tweets->links() }}
    </div>
</x-app-layout>
