@if(isset($iduser) and ($spts == "steptwo" or $spts == "stepthree" or $spts == "stepfour" or $spts == "stepfive"))
<h1>Step TWO</h1>
<form method="post" action="{{ route('content.store') }}" class="mt-6 space-y-6">
    @csrf
    
    <div><x-text-input id="unid" class="block mt-1 w-full" type="hidden" name="unid" value="{{Auth::user()->id;}}" /></div>
        <div><x-text-input id="unsts" class="block mt-1 w-full" type="hidden" name="unsts" value="two" /></div>

        @if(isset($iduser) and ($spts == "stepthree" or $spts == "stepfour" or $spts == "stepfive"))
        <div class="flex items-center gap-4">
            <x-input-label for="Confirmed" :value="__('Confirmed')" />
        </div>
@else
    <div class="flex items-center gap-4">
        <x-primary-button>{{ __('Finish') }}</x-primary-button>

        @if (session('status') === 'profile-updated')
            <p
                x-data="{ show: true }"
                x-show="show"
                x-transition
                x-init="setTimeout(() => show = false, 2000)"
                class="text-sm text-gray-600 dark:text-gray-400"
            >{{ __('Confirmed.') }}</p>
        @endif
    </div>
    @endif
</form>

@else
    <h1>Must to Finish Step One</h1>
@endif