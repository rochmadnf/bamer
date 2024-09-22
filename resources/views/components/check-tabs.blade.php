<div class="flex my-4 justify-between gap-x-4">
    <x-tab name="Naive Bayes" id="naiveBayes" :route="route('algo', ['algo' => 'naive'])" />
    <x-tab name="KNN" id="knearest" :route="route('algo', ['algo' => 'knn'])" />
</div>
