<?php
$socials = themeGetSocials();
?>

<div class="bg-black">
    <div class="body-margin">
        <div class="contact-container">
            {{-- Socials --}}
            <div class="py-5">
                <span class="text-base font-bold tracking-wide text-white">Social platforms</span>
                <div class="flex items-center flex-wrap mt-1 space-x-5">
                    @foreach ($socials as $social => $details)
                    @php
                        $socialUrl = settings('r', 'akkura.'.$social);
                    @endphp
                    @if (!empty($socialUrl))
                    <a href="{{$socialUrl}}" rel="nofollow noopener noreferrer" class="text-white transition-colors duration-300">
                        <span>&nbsp;&nbsp;&nbsp;&nbsp;{!! $details['icon'] !!}&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    </a>
                    @endif
                    @endforeach
                </div>
                <p class="mt-2 text-sm text-gray-500">
                    Please Follow
                </p>
            </div>

            {{-- Newsletter --}}
            <div class="flex justify-center px-2">
                <div class="newsletter-container">
                    <h4 class="newsletter-title">Want more amazing posts?</h4>
                    <p class="newsletter-text">
                        Sign up to get notified whenever new
                        posts get published.
                    </p>
                    <div class="newsletter-form-container">
                        <input class="newsletter-input" type="email" placeholder="Enter your email" value="">
                        <button class="newsletter-submit-btn">
                            <span class="block ">Subscribe</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>


<div class="bg-black">
    <footer class="h-32 flex items-center justify-center text-gray-400">
        <div class="body-margin">
            <p class="text-center">Copyright &copy; Akkura | Powered by <a href="https://nidavel.com">Nidavel</a>
        </div>
    </footer>
</div>