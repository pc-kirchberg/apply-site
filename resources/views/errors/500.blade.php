<div class="content">
  <h1>Something went wrong.</h1>
  <p>We're sorry, something went wrong internally. Please try again soon or contact us at <code>hello@pupilscom-esl1.eu</code>.</p>
@unless(empty($sentryID))
  <p>If you contact us, please include the code <code>{{ $sentryID }}</code></p>
  <!-- Sentry JS SDK 2.1.+ required -->
    <script src="https://cdn.ravenjs.com/3.3.0/raven.min.js"></script>

    <script>
        Raven.showReportDialog({
            eventId: '{{ $sentryID }}',
            dsn: 'https://570ab35bb7a84692a5af7c3a1669c335@sentry.io/215510'
        });
    </script>
  @endunless
</div>