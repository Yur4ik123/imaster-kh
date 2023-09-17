<template>
    <div class="map__block uk-position-relative" style="height:400px; width:100%">
        <div class="map__b">
            <Icon name="tabler:hand-click" size="100px" color="#F9FAFC"/>
        </div>
        <LMap
            class="l__map"
            ref="map"
            :zoom="zoom"
            :center="latlng"
        >
            <LTileLayer
                url="https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png"
                attribution="&amp;copy; <a href=&quot;https://www.openstreetmap.org/&quot;>OpenStreetMap</a> contributors"
                layer-type="base"
                name="OpenStreetMap"
            />
            <LMarker :lat-lng="latlng">

            </LMarker>
        </LMap>
    </div>
</template>
<script setup lang="ts">
import { ref } from 'vue'
const zoom = ref(17)
const latlng = ref([49.95618,36.36037])
</script>
<style lang="scss">
.map__block{
    .l__map{
        z-index: 1;
    }
    .map__b{
        position: absolute;
        z-index: 2;
        transition: 0.3s;
        left: 0;
        top: 0;
        bottom: 0;
        right: 0;
        background-color: rgba($color:black, $alpha: 0.4);
        display: flex;
        justify-content: center;
        align-items: center;
        opacity: 1;
        visibility: visible;
    }
    &:hover{
        .map__b{
            opacity: 0;
            visibility: hidden;

        }
    }
}
</style>
