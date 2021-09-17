@extends('Customer.layouts.app')
@section('content')
<!--Carousel Section-->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{url('/images/a.jpg')}}" alt="First slide" height="980px">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{url('/images/one.jpg')}}" alt="Second slide" height="980px">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{url('/images/two.jpg')}}" alt="Third slide" height="980px">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!--Carousel Section Ends-->
<!--Agriculture in Nepal Introduction-->
    <div class="jumbotron space">
    <h1 class="pt-5 text-center">Agriculture In Nepal</h1>
    <p class="pt-3 pl-5">In Nepal, the economy is dominated by agriculture. In the late 1980s, it was the livelihood for more than 90% of the population, although only approximately 20% of the total 
      land area was cultivable, it accounted for, on average, about 60% of the GDP and approximately 75% of exports. Since the formulation of the Fifth Five-Year Plan (1975–80), 
      agriculture has been the highest priority because economic growth was dependent on both increasing the productivity of existing crops and diversifying the agricultural base for 
      use as industrial inputs.According to the World Bank, agriculture is the main source of food, income, and employment for the majority. It provides about 33% of the gross 
      domestic product (GDP). In trying to increase agricultural production and diversify the agricultural base, the government focused on irrigation, the use of fertilizers and 
      insecticides, the introduction of new implements and new seeds of high-yield varieties, and the provision of credit. The lack of distribution of these inputs, as well as 
      problems in obtaining supplies, however, inhibited progress. Although land reclamation and settlement were occurring in the Terai Region, environmental degradation and 
      ecological imbalance resulting from deforestation also prevented progress. Although new agricultural technologies helped increase food production, there still was room for
      further growth. Past experience indicated bottlenecks, however, in using modern technology to achieve a healthy growth. The conflicting goals of producing cash crops both for 
      food and for industrial inputs also were problematic.</p>
    </div>
    <div class="jumbotron space">
      <h1 class="pt-5 text-center">History</h1>
    <p class="pt-3 pl-5">The production of crops fluctuated widely as a result of these factors as well as weather conditions. Although agricultural production grew at an average 
    annual rate of 2.4 percent from 1974 to 1989, it did not keep pace with population growth, which increased at an average annual rate of 2.6 percent over the same period. Further,
    the annual average growth rate of food grain production was only 1.2 percent during the same period. There were some successes. Fertile lands in the Terai Region and hardworking
    peasants in the Hill Region provided greater supplies of food staples (mostly rice and corn), increasing the daily caloric intake of the population locally to over 2,000 calories 
    per capita in 1988 from about 1,900 per capita in 1965. Moreover, areas with access to irrigation facilities increased from approximately 6,200 hectares in 1956 to nearly 583,000 
    hectares by 1990. Rice is the most important cereal crop. In 1966 total rice production amounted to a little more than 1 million tons; by 1989 more than 3 million tons were 
    produced. Fluctuation in rice production was very common because of changes in rainfall; overall, however, rice production had increased following the introduction of new 
    cultivation techniques as well as increases in cultivated land. By 1988 approximately 3.9 million hectares of land were under paddy cultivation. Many people in Nepal devote their 
    lives to cultivating rice to survive. In 1966 approximately 500,000 tons of corn, the second major food crop, were produced. By 1989 corn production had increased to over 1 
    million tons.</p>
    </div>
    <h1 class="text-center"><b>Our Products</b></h1>
    <div class="products">
    <div class="card" style="width:400px">
    <img class="card-img-top" src="{{url('/images/insecticides.jpg') }}" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">Insecticides</h4>
      <p class="card-text">Insecticides are substances used to kill insects. They include ovicides and larvicides used against insect eggs and larvae, respectively.</p>
      <a href="/insecticides" class="btn btn-primary">Buy</a>
    </div>
    </div>
    </div>
    <div class="products">
    <div class="card" style="width:400px">
    <img class="card-img-top" src="{{url('/images/pesticides.jpg') }}" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">Pesticides</h4>
      <p class="card-text">Pesticide is a chemical (such as carbamate) or biological agent (such as a virus, bacterium, or fungus) that deters, incapacitates, kills, or otherwise discourages pests.</p>
      <a href="/pesticides" class="btn btn-primary">Buy</a>
    </div>
    </div>
    </div>
    <div class="products">
    <div class="card" style="width:400px">
    <img class="card-img-top" src="{{url('/images/seeds.jpg') }}" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">Seeds</h4>
      <p class="card-text">A seed is an embryonic plant enclosed in a protective outer covering. The formation of the seed is part of the process of reproduction in seed plants, the spermatophytes, including the gymnosperm and angiosperm plants.</p>
      <a href="/seeds" class="btn btn-primary">Buy</a>
    </div>
    </div>
    </div>
    <div class="clear"></div>
 
<!--Agriculture in Nepal Introduction-->
@endsection

</body>
</html>