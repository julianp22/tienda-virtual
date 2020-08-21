<!--
<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an example component.
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
-->

<template>
  <div>
    <!-- CAROUSEL -->
    <b-carousel
      id="carousel-1"
      v-model="slide"
      :interval="4000"
      fade
      controls
      indicators
      background="#ababab"
      img-width="max-width"
      img-height="480"
      style="text-shadow: 1px 1px 2px #333;"
      @sliding-start="onSlideStart"
      @sliding-end="onSlideEnd"
    >
      <!-- Text slides with image -->
      <b-carousel-slide
        caption="First slide"
        text="Nulla vitae elit libero, a pharetra augue mollis interdum."
        img-src="https://picsum.photos/1024/480/?image=52"
      ></b-carousel-slide>

      <!-- Slides with custom text -->
      <b-carousel-slide img-src="https://picsum.photos/1024/480/?image=54">
        <h1>Hello world!</h1>
      </b-carousel-slide>

      <!-- Slides with image only -->
      <b-carousel-slide img-src="https://picsum.photos/1024/480/?image=58"></b-carousel-slide>

      <!-- Slides with img slot -->
      <!-- Note the classes .d-block and .img-fluid to prevent browser default image alignment -->
      <b-carousel-slide>
        <template v-slot:img>
          <img
            class="d-block img-fluid w-100"
            width="1024"
            height="480"
            src="https://picsum.photos/1024/480/?image=55"
            alt="image slot"
          >
        </template>
      </b-carousel-slide>
    </b-carousel>

    <p class="mt-4">
      Slide #: {{ slide }}<br>
      Sliding: {{ sliding }}
    </p>

    <!-- CARDS -->
    <b-card-group deck>
      <b-card title="Camisetas" img-src="https://picsum.photos/300/300/?image=41" img-alt="Image" img-top>
        <template v-slot:footer>
          <small class="text-muted">Last updated 3 mins ago</small>
        </template>
        <a href="#" class="stretched-link"></a>
      </b-card>
      

      <b-card title="Pantalones" style="color: #008b8b;" img-src="https://picsum.photos/300/300/?image=41" img-alt="Image" img-top>
        <template v-slot:footer>
          <small class="text-muted">Last updated 3 mins ago</small>
        </template>
        <a href="#" class="stretched-link"></a>
      </b-card>

      <b-card title="Zapatos" img-src="https://picsum.photos/300/300/?image=41" img-alt="Image" img-top>
        <template v-slot:footer>
          <small class="text-muted">Last updated 3 mins ago</small>
        </template>
        <a href="#" class="stretched-link"></a>
      </b-card>

      <b-card title="Accesorios" img-src="https://picsum.photos/300/300/?image=41" img-alt="Image" img-top>
        <template v-slot:footer>
          <small class="text-muted">Last updated 3 mins ago</small>
        </template>
        <a href="#" class="stretched-link"></a>
      </b-card>
    </b-card-group>
  </div>
</template>

<script>
  export default {
    data() {
      return {
        slide: 0,
        sliding: null
      }
    },
    methods: {
      onSlideStart(slide) {
        this.sliding = true
      },
      onSlideEnd(slide) {
        this.sliding = false
      }
    }
  }
</script>

