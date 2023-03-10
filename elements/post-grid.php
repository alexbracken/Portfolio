<div class="post-grid">
    <@ if @{checkboxFilterByTags} @>
        <div class="filters">
            <div class="container is-fluid">
                <div class="field is-grouped is-grouped-multiline">
                    <@ foreach in filters @>
                    <div class="control">
                        <div class="tags has-addons">
                            <a 
                                class="tag
                                    <@ if @{ ?filter } = @{ :filter } @>
                                        is-active
                                    <@end@>"
                                href="?<@ queryStringMerge { filter: @{ :filter } } @>">
                            @{:filter}
                            </a>
                            <@ if @{ ?filter } = @{ :filter } @><a class="tag is-delete is-active" href="?<@ queryStringMerge { filter: false } @>"></a><@ end @>
                        </div>
                    </div>
                    <@ end @>
                </div>
            </div>
        </div>
    <@ end @>

<div class="container">
    <div class="grid">
        <div class="grid-sizer"></div>
        <@ foreach in pagelist @>
            <div class="grid-item">
                <article class="project-container">
                    <div class="project-image">
                        <a href="@{url}">
                            <@ if not @{checkboxIsGif} @>
                                <@ with @{imageFeatured_01} {width: 300} @>
                                    <@ set { ":small": @{ :fileResized } } @>
                                <@ end @>
                                <@ with @{imageFeatured_01} {width: 600} @>
                                    <@ set { ":medium": @{ :fileResized } } @>
                                <@ end @>
                                <@ with @{imageFeatured_01} {width: 900} @>
                                    <@ set { ":large": @{ :fileResized } } @>
                                <@ end @>
                                <@ with @{imageFeatured_01} {width: 1200}} @>
                                    <@ set { "xlarge": @{ :fileResized } } @>
                                <@ end @>
                                
                                <@ if @{:i} >= 1 @>
                                    <@ with @{imageFeatured_01} {width: 300} @>
                                        <img 
                                            class="project-thumbnail"
                                            srcset=
                                                "@{:small} 1x,
                                                @{:medium} 2x,
                                                @{:large} 3x,
                                                @{:xlarge} 4x"
                                            src="@{ :file }" 
                                            alt="@{ :caption }">
                                        </img>
                                    <@ end @>
                                <@ end @>
                            <@ else @>
                                <@ foreach in filelist @>
                                    <@ if @{:i} >= 1 @>
                                        <img class="project-thumbnail" src="@{:file}"><img>
                                    <@ end @>
                                <@ end @>
                            <@ end @>
                        </a>
                    </div>
                    <div class="project-info">
                        <div class="project-info-container">
                            <h2 class="title">
                                <a class="link" href="@{url}">@{title}</a>
                            </h2>
                            <div class="tags">
                                <@ foreach in tags @>
                                <span class="tag">
                                    @{ :tag }
                                </span>
                                <@ end @>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        <@ end @>
    </div>
</div>