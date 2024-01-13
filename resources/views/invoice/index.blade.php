<html>
  <head>
    <meta charset="utf-8" />
    <title>Invoice</title>
    <link rel="stylesheet" href="{{ asset('invoice') }}/css/invoice.css" />
    <script src="{{ asset('invoice') }}/js/invoice.js"></script>
  </head>
  <body>
    <header>
      <h1>Invoice</h1>
      <address contenteditable>
        <p>{{ auth()->user()->name }}</p>
        <p>{{ auth()->user()->email }}
        <p>{{ auth()->user()->phone }}</p>
      </address>
    <article>
      <h1>Recipient</h1>
      <address contenteditable>
        <p>{{ $tour->group_name }}</p>
      </address>
      <table class="meta">
        <tr>
          <th><span contenteditable>Invoice #</span></th>
          <td><span contenteditable>{{ random_int(100000, 999999) }}</span></td>
        </tr>
        <tr>
          <th><span contenteditable>Date</span></th>
          <td><span contenteditable>{{ $tour->created_at->format('Y-m-d') }}</span></td>
        </tr>
        <tr>
          <th><span contenteditable>Amount Due</span></th>
          <td><span id="prefix" contenteditable>Tk</span><span>{{ $tour->total_cost - $tour->booking_cost }}</span></td>
        </tr>
      </table>
      <table class="inventory">
        <thead>
          <tr>
            <th><span contenteditable>Group</span></th>
            <th><span contenteditable>Location</span></th>
            <th><span contenteditable>Cost</span></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <a class="cut">-</a
              ><span contenteditable>{{ $tour->group_name }}</span>
            </td>
            <td><span contenteditable>{{ $tour->location }}</span></td>
            <td>
              <span data-prefix>Tk</span><span contenteditable>{{ $tour->total_cost }}</span>
            </td>
          </tr>
        </tbody>
      </table>
      <table class="balance">
        <tr>
          <th><span contenteditable>Total</span></th>
          <td><span data-prefix>Tk</span><span>{{ $tour->total_cost }}</span></td>
        </tr>
        <tr>
          <th><span contenteditable>Amount Paid</span></th>
          <td><span data-prefix>Tk</span><span contenteditable>{{ $tour->booking_cost }}</span></td>
        </tr>
        <tr>
          <th><span contenteditable>Balance Due</span></th>
          <td><span data-prefix>Tk</span><span>{{ $tour->total_cost - $tour->booking_cost }}</span></td>
        </tr>
      </table>
    </article>
    <aside>
      <h1><span contenteditable>Additional Notes</span></h1>
      <div contenteditable>
        <p>You must bring your invoice(Hard Copy) at the tour</p>
      </div>
    </aside>
  </body>
</html>
