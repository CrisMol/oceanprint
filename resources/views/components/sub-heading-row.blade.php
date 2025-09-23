<div class="row-subheading">
    <div class="subheading">
        <h2 class="animated-title">
            <span class="word first">{{ $title ?? 'Principales' }}</span>
            <br>
            <span class="word second">{{ $subtitle ?? 'Servicios' }}</span>
        </h2>
    </div>
    @if ($description != '')
        <div class="description dark scroll-section">
            <div class="container-description">
                <p class="scroll-animate">
                    <span>{!! $description ?? 'Somos una imprenta profesional que cuenta con una amplia gama de servicios de impresión para satisfacer tus necesidades.' !!}</span>
                </p>
            </div>
        </div>
    @endif
</div>
