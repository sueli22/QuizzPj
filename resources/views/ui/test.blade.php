<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Quizz</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/aos/aos.css" rel="stylesheet')}}">
  <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{asset('assets/css/main.css')}}" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">

<style>
        .border-buttom {
  border-bottom: 1px solid white;
}
</style>
</head>
    <style>
        yle>.box {
            border: 1px solid #ccc;
            box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease;
        }

        .box:hover {
            box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.2);
        }

        .scrollable {
            max-height: 70vh;
            /* Adjust max height as needed */
            overflow-y: auto;
        }
    </style>

            <div class="container">
                <div class="row justify-content-center mt-5">
                    <div class="col-md-11 card-body scrollable">
                        <div>
                            <h1 style="font-family: 'Freckle Face', cursive;" class="card-header">Let Start Testing</h1>
                            <div class="" style="font-family: 'Freckle Face', cursive;">
                                <div>

                                    <div class="card-body" style="font-family: 'Freckle Face', cursive;">
                                        <div id="timer" style="font-size: 24px; margin-bottom: 20px;">01:00</div>
                                        <!-- Countdown timer -->
                                        <div id="time-limit-message"
                                            style="font-size: 24px; margin-bottom: 20px; display: none; color: red;">သင့်ရဲ့
                                            ဖြေဆိုချိန်ပြည့်သွားပါပီ နောင်တကြိမ်ကြိုးစားပါ!</div>
                                        <!-- Time limit message -->
                                        <form id="test-form" method="POST" action="{{ route('client.test.store') }}">
                                            @csrf
                                            <div class="mb-1">
                                                <div class="card-header">Your Choice Category - {{ $category->name }}</div>
                                                <div class="card-body">
                                                    @foreach ($category->questions as $question)
                                                        <div class="border @if (!$loop->last) mb-1 @endif">
                                                            <div class="card-header">{{ $question->name }}</div>
                                                            <div class="card-body box">
                                                                <input type="hidden" name="questions[{{ $question->id }}]"
                                                                    value="">
                                                                <input type="hidden" name="category_id"
                                                                    value="{{ $category->id }}">
                                                                @foreach ($question->options as $option)
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="questions[{{ $question->id }}]"
                                                                            id="option-{{ $option->id }}"
                                                                            value="{{ $option->id }}"
                                                                            @if (old("questions.$question->id") == $option->id) checked @endif>
                                                                        <label class="form-check-label"
                                                                            for="option-{{ $option->id }}">
                                                                            {{ $option->answer }}
                                                                        </label>
                                                                    </div>
                                                                @endforeach
                                                                @if ($errors->has("questions.$question->id"))
                                                                    <span
                                                                        style="margin-top: .25rem; font-size: 80%; color: #e3342f;"
                                                                        role="alert">
                                                                        <strong>{{ $errors->first("questions.$question->id") }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <div class="form-group row mb-0">
                                                <div class="col-md-6">
                                                    <button type="submit" class="btn btn-primary">
                                                        Submit
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                               
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
    <script>
        // Set the countdown time in seconds
        let timeLeft = 60;

        // Get the timer element and the time limit message element
        const timerElement = document.getElementById('timer');
        const timeLimitMessage = document.getElementById('time-limit-message');

        // Function to format the time as mm:ss
        function formatTime(seconds) {
            const minutes = Math.floor(seconds / 60);
            const remainingSeconds = seconds % 60;
            return `${minutes.toString().padStart(2, '0')}:${remainingSeconds.toString().padStart(2, '0')}`;
        }

        // Function to update the timer
        function updateTimer() {
            if (timeLeft > 0) {
                timeLeft--;
                timerElement.textContent = formatTime(timeLeft);
            } else {
                // Disable all inputs and buttons when the time is up
                document.querySelectorAll('input, button').forEach(el => el.disabled = true);
                // Display the time limit message
                timeLimitMessage.style.display = 'block';

                // Redirect to another page after 5 seconds
                setTimeout(function() {
                    window.location.href = '{{ route('home') }}';
                }, 5000); // Adjust the delay time (in milliseconds) as needed
            }
        }

        // Update the timer every second
        const timerInterval = setInterval(updateTimer, 1000);
    </script>
</body>

</html>
<script>
    AOS.init({
        duration: 1200, // duration of animations in milliseconds
        once: true, // whether animation should happen only once
    });
</script>
