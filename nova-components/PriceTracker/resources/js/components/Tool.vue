<template>
    <div>
        <heading class="mb-6">Price Tracker For INR</heading>
        <!-- <button v-on:click="getData">Get Weather Data</button> -->
    <div class="price-data">
      <div class="price-stats">
        <div>
          <span class="currency">1 INR to USD</span>
        </div>
      </div>
      <div class="price-temp">
        <span>{{DataList.USD}}</span>
      </div>
    </div>
    <div class="price-data">
      <div class="price-stats">
        <div>
          <span class="currency">1 INR to GBP</span>
        </div>
      </div>
      <div class="price-temp">
        <span>{{DataList.GBP}}</span>
      </div>
    </div>
    <div class="price-data">
      <div class="price-stats">
        <div>
          <span class="currency">1 INR to EUR</span>
        </div>
      </div>
      <div class="price-temp">
        <span>{{DataList.EUR}}</span>
      </div>
    </div>
    </div>
</template>

<script>
export default {
    data() {
    return {
      DataList: []
    };
  }, mounted() {
      this.getData() 
        //axios.get('/api/prices').then(response => (this.info = response))
        // axios.get('/api/prices').then(res => console.log(res.data.rates))
        // axios.get('/api/prices').then(res => (this.results = res.data.rates))
        //axios.get('/api/prices').then(response => (this.DataList = response.data.rates))  
  },
  methods: {
    getData() {
      //   fetch("price.json")
      //     .then(response => response.json())
      //     .then(data => (this.priceDataList = data));
      axios.get('/api/prices').then(response => (this.DataList = response.data.rates))  
    }
  },
 
    
};
</script>

<style>
/* Scoped Styles */
.price-data {
  display: flex;
  align-items: center;
  margin-top: 20px;
  margin-left: 20px;
  border-bottom: 2px solid #ccc;
  padding: 20px;
}

.price-icon {
  flex-grow: 1;
}

.price-stats {
  flex-grow: 8;
  text-align: left;
  padding-left: 20px;
}

.price-stats .currency {
  font-size: 30px;
}

.price-temp {
  flex-grow: 1;
  font-size: 35px;
}
</style>
