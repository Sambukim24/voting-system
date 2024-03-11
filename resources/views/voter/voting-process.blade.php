<x-master-voter>
    @csrf
    <section id="intro">
        <div class="intro-container">
            <h1 class="mb-4 pb-0"><span>How to Vote?</span></h1>
            <p class="mb-4 pb-0">Step 1</p>
            <p class="mb-4 pb-0">You will be shown a list of candidate in your area, you have to select a candidate from
                list to vote.</p>

            <p class="mb-4 pb-0">Step 2</p>
            <p class="mb-4 pb-0">After selecting a candidate, capture your face video of length 5-10 seconds from webcam
                if you vote from computer/laptop or front camera if you vote from smartphone/tablet and upload it, the
                video should be recorded in a good lighting condition and face should be clearly visible.</p>

            <p class="mb-4 pb-0">Step 3</p>
            <p class="mb-4 pb-0">If face recognition is successful, then you have to enter the 6 digit one time password
                (OTP) which is sent to your registered mobile number for verification.</p>

            <p class="mb-4 pb-0">Step 4</p>
            <p class="mb-4 pb-0">If the mobile OTP verification is successful, then you have to enter the 6 digit
                alphanumeric one time password (OTP) which is sent to your registered email address for verification.
            </p>

            <p class="mb-4 pb-0">Step 5</p>
            <p class="mb-4 pb-0">If the email OTP verification is successful then the vote will be submitted.</p>
        </div>
    </section>
</x-master-voter>
