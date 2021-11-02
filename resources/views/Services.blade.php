@extends('layouts.app1')

@section('content')
<div class="spacer"></div>
    <main>
        <section>
            <div class="container">
                <div class="row service-img-row">
                    <div class="col">
                       
                        <img src="{{url('/images/services.jpg')}}" alt="a_service_image"/>
                    </div>
                </div>
                <div class="row service-headding-row">
                    <div class="col">
                        <h3>Services Pricing</h3>
                    </div>
                </div>
                <div class="row service-pricing-row">
                    <div class="col">
                        <table align="center" class="service-table">
                            <tr>
                                <td class="column1">
                                    Women's Haircut
                                </td>
                                <td class="column2">
                                    $75-85
                                </td>
                            </tr>
                            <tr>
                                <td class="column1">
                                    Women's Haircut w/ Single Process Color
                                </td>
                                <td class="column2">
                                    $155-165
                                </td>
                            </tr>
                            <tr>
                                <td class="column1">
                                    Women's Haircut w/ Single Process Color & Highlights
                                </td>
                                <td class="column2">
                                    $210-225
                                </td>
                            </tr>
                            <tr>
                                <td class="column1">
                                    Women's Haircut w/ Partial Foil Highlights
                                </td>
                                <td class="column2">
                                    $175-190
                                </td>
                            </tr>
                            <tr>
                                <td class="column1">
                                    Women's Haircut w/ Full Foil Highlights
                                </td>
                                <td class="column2">
                                    $200-215
                                </td>
                            </tr>
                            <tr>
                                <td class="column1">
                                    Women's Haircut w/ Balayage Highlights
                                </td>
                                <td class="column2">
                                    $235
                                </td>
                            </tr>
                            <tr>
                                <td class="column1">
                                </td>
                                <td class="column2">
                                </td>
                            </tr>
                            <tr>
                                <td class="column1">
                                    Men's Haircut
                                </td>
                                <td class="column2">
                                    $50-55
                                </td>
                            </tr>
                            <tr>
                                <td class="column1">
                                    Men's Haircut w/ Single Process Color
                                </td>
                                <td class="column2">
                                    $125-130
                                </td>
                            </tr>
                            <tr>
                                <td class="column1">
                                </td>
                                <td class="column2">
                                </td>
                            </tr>
                            <tr>
                                <td class="column1">
                                    Deva Curl Haircut
                                </td>
                                <td class="column2">
                                    $85-95
                                </td>
                            </tr>
                            <tr>
                                <td class="column1">
                                    Deva Curl Style Session
                                </td>
                                <td class="column2">
                                    $50
                                </td>
                            </tr>
                            <tr>
                                <td class="column1">
                                    Deva Curl Haircut w/ Pintura Highlights
                                </td>
                                <td class="column2">
                                    $235
                                </td>
                            </tr>
                            <tr>
                                <td class="column1">
                                    Deva Curl Haircut w/ Single Process Color
                                </td>
                                <td class="column2">
                                    $165-175
                                </td>
                            </tr>
                            <tr>
                                <td class="column1">
                                    Deva Curl Haircut w/ Single Process Color & Highlights
                                </td>
                                <td class="column2">
                                    $220-235
                                </td>
                            </tr>
                            <tr>
                                <td class="column1">
                                    Deva Curl Haircut w/ Partial Foil Haircut
                                </td>
                                <td class="column2">
                                    $185-200
                                </td>
                            </tr>
                            <tr>
                                <td class="column1">
                                    Deva Curl Haircut w/ Full Foil Haircut
                                </td>
                                <td class="column2">
                                    $210-225
                                </td>
                            </tr>
                            <tr>
                                <td class="column1">
                                    Deva Curl Pintura Highlights
                                </td>
                                <td class="column2">
                                    $170
                                </td>
                            </tr>
                            <tr>
                                <td class="column1">
                                </td>
                                <td class="column2">
                                </td>
                            </tr>
                            <tr>
                                <td class="column1">
                                    Single Process Color
                                </td>
                                <td class="column2">
                                    $120
                                </td>
                            </tr>
                            <tr>
                                <td class="column1">
                                    Single Process Color & Highlights
                                </td>
                                <td class="column2">
                                    $175-180
                                </td>
                            </tr>
                            <tr>
                                <td class="column1">
                                    Partial Foil Highlights
                                </td>
                                <td class="column2">
                                    $140-145
                                </td>

                            </tr>
                            <tr>
                                <td class="column1">
                                    Full Foil Highlights
                                </td>
                                <td class="column2">
                                    $165-170
                                </td>
                            </tr>
                            <tr>
                                <td class="column1">
                                    Balayage Highlights
                                </td>
                                <td class="column2">
                                    $190
                                </td>
                            </tr>
                            <tr>
                                <td class="column1">
                                    Blow-Dry
                                </td>
                                <td class="column2">
                                    $50
                                </td>
                            </tr>
                            <tr>
                                <td class="column1">
                                    Brazilian Blowout
                                </td>
                                <td class="column2">
                                    $260
                                </td>
                            </tr>
                            <tr>
                                <td class="column1">
                                    Corrective Color
                                </td>
                                <td class="column2">
                                    Consultation required
                                </td>
                            </tr>

                        </table>
                        <p class="p1">Services include appropriate finish services (i.e. blow-dry, Deva set)</p>
                        <p class="p2">*Prices are subject to change without notice and can vary depending on length and thickness of hair.</p>
                    </div>

                </div>
            </div>

        </section>
    </main>

@endsection