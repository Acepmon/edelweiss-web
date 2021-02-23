@if ($faq)
<div class="ac-item">
    <h5 class="ac-title"><i class="fa fa-question-circle"></i>{{ $faq->question }}</h5>
    <div style="" class="ac-content">{{ $faq->answer }}</div>
</div>
@endif