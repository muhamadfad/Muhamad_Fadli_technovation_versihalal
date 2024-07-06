<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span class="font-weight-bold">Copyright  {{ date('Y') }}</span>
            <div>
                <img style="height:30px;"class="" src="{{ auth()->user()->getlogoBI() }}">
                <img style="height:30px;"class="" src="{{ auth()->user()->getlogoalhazen() }}">
                <img style="height:30px;"class="" src="{{ auth()->user()->getlogoisef() }}">
                <img style="height:30px;"class="" src="{{ auth()->user()->getlogofesyar() }}">
                <img style="height:30px;"class="" src="{{ auth()->user()->getlogoekonomisyariah() }}">
            </div>
        </div>
    </div>
</footer>
