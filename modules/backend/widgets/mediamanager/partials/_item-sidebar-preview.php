<div data-control="media-preview-container"></div>

<script type="text/template" data-control="audio-template">
    <div class="panel no-padding-bottom">
        <audio src="{src}" controls>
            <div class="media-player-fallback panel-embedded">Your browser doesn't support HTML5 audio.</div>
        </audio>
    </div>
</script>

<script type="text/template" data-control="video-template">
    <video src="{src}" controls poster="<?= Url::asset('modules/backend/widgets/mediamanager/assets/images/video-poster.png') ?>">
        <div class="panel media-player-fallback">Your browser doesn't support HTML5 video.</div>
    </video>
</script>

<script type="text/template" data-control="image-template">
    <div class="sidebar-image-placeholder-container"><div class="sidebar-image-placeholder" data-path="{path}" data-last-modified="{last-modified}" data-loading="true" data-control="sidebar-thumbnail"></div></div>
</script>

<script type="text/template" data-control="document-template">
    <div class="sidebar-document-placeholder-container"><div class="sidebar-document-placeholder" data-path="{path}" data-last-modified="{last-modified}" data-control="sidebar-document"></div></div>
</script>

<script type="text/template" data-control="no-selection-template">
    <div class="sidebar-image-placeholder-container">
        <div class="sidebar-image-placeholder no-border">
            <i class="icon-crop"></i>
            <p><?= e(trans('backend::lang.media.nothing_selected')) ?></p>
        </div>
    </div>
</script>

<script type="text/template" data-control="multi-selection-template">
    <div class="sidebar-image-placeholder-container">
        <div class="sidebar-image-placeholder no-border">
            <i class="icon-asterisk"></i>
            <p><?= e(trans('backend::lang.media.multiple_selected')) ?></p>
        </div>
    </div>
</script>

<script type="text/template" data-control="go-up">
    <div class="sidebar-image-placeholder-container">
        <div class="sidebar-image-placeholder no-border">
            <i class="icon-level-up"></i>
            <p><?= e(trans('backend::lang.media.return_to_parent')) ?></p>
        </div>
    </div>
</script>
