<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="flex flex-col mt-20">
        <div class="mb-32">
            <article>
                <div class="flex justify-between">
                    <h1 class="text-3xl mb-4">{{ $post['title'] }}</h1>
                    <p class="">create by {{ $post['author'] }}</p>
                </div>
                <div class="max-w-screen-sm">
                    <p class="mb-4"><img
                            src="https://img.freepik.com/free-photo/sunset-silhouettes-trees-mountains-generative-ai_169016-29371.jpg?t=st=1727927671~exp=1727931271~hmac=2e934d02c3c1500c0d9180bce0965eb8e22b517893af3f70c48d7f155745ed40&w=1060"
                            alt=""></p>
                    <p class="">{{ $post['body'] }}</p>
                </div>
            </article>
        </div>
    </div>
</x-layout>
